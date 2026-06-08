<?php
/**
 * Template for page slug: llms-page
 * Self-contained LLMs.txt preview + download page.
 */

function btc_llms_page_is_french()
{
    if (function_exists('pll_current_language')) {
        return pll_current_language() === 'fr';
    }

    return get_locale() === 'fr_FR';
}

function btc_llms_page_labels()
{
    $is_french = btc_llms_page_is_french();

    if ($is_french) {
        return array(
            'page_title'       => 'LLMs.txt',
            'page_desc'        => 'Un aperçu structuré de ce site pour les systèmes d\'IA et les modèles de langage, conforme à la spécification llms.txt.',
            'download_btn'     => 'Télécharger llms.txt',
            'copy_btn'         => 'Copier le contenu',
            'copied_msg'       => 'Copié dans le presse-papiers',
            'section_key'      => 'Pages Principales',
            'section_products' => 'Catégories de Produits',
            'section_media'    => 'Médias',
            'section_contact'  => 'Contact',
            'section_optional' => 'Optionnel',
            'site_desc'        => 'BTC, située au Bénin, est la première usine textile entièrement intégrée verticalement d\'Afrique de l\'Ouest, transformant du coton local certifié CmiA en vêtements de qualité supérieure.',
            'home_fallback'    => 'Accueil',
            'address_label'    => 'Adresse',
            'address_text'     => 'Ilot C/SB, Tangbo-Djèvié, Plot F-1, Maison Etat Béninois, Zè - Benin',
            'key_slugs'        => array('a-propos-de-nous', 'capacites', 'durabilite', 'pourquoi-btc', 'nos-produits', 'integration-verticale'),
            'media_slugs'      => array('tous-les-blogs', 'evenements-et-engagements'),
            'contact_slug'     => 'contactez-nous',
            'privacy_slug'     => 'politique-de-confidentialite',
            'home_url'         => home_url('/fr/'),
        );
    }

    return array(
        'page_title'       => 'LLMs.txt',
        'page_desc'        => 'A curated overview of this website for AI systems and language models, following the llms.txt specification.',
        'download_btn'     => 'Download llms.txt',
        'copy_btn'         => 'Copy content',
        'copied_msg'       => 'Copied to clipboard',
        'section_key'      => 'Key Pages',
        'section_products' => 'Product Categories',
        'section_media'    => 'Media',
        'section_contact'  => 'Contact',
        'section_optional' => 'Optional',
        'site_desc'        => 'BTC, located in Benin, is West Africa\'s first fully vertically integrated textile factory, transforming rain-fed, non-GMO CmiA-certified cotton into premium apparels.',
        'home_fallback'    => 'Home',
        'address_label'    => 'Address',
        'address_text'     => 'Ilot C/SB, Tangbo-Djèvié, Plot F-1, Maison Etat Béninois, Zè - Benin',
        'key_slugs'        => array('about-us', 'capabilities', 'sustainability', 'why-btc', 'products', 'vertical-integration'),
        'media_slugs'      => array('blogs', 'all-event'),
        'contact_slug'     => 'contact-us',
        'privacy_slug'     => 'privacy-policy',
        'home_url'         => home_url('/'),
    );
}

function btc_llms_page_get_meta_title($post_id, $fallback = '')
{
    $meta_title = get_post_meta($post_id, 'meta_title', true);

    if (empty($meta_title)) {
        $meta_title = get_post_meta($post_id, '_btc_meta_title', true);
    }

    if (!empty($meta_title)) {
        return wp_strip_all_tags($meta_title);
    }

    if (!empty($fallback)) {
        return wp_strip_all_tags($fallback);
    }

    return wp_strip_all_tags(get_the_title($post_id));
}

function btc_llms_page_get_meta_description($post_id, $fallback = '')
{
    $meta_description = get_post_meta($post_id, 'meta_description', true);

    if (empty($meta_description)) {
        $meta_description = get_post_meta($post_id, '_btc_meta_description', true);
    }

    if (!empty($meta_description)) {
        return wp_strip_all_tags($meta_description);
    }

    $excerpt = wp_strip_all_tags(get_the_excerpt($post_id));
    if (!empty($excerpt)) {
        return $excerpt;
    }

    if (!empty($fallback)) {
        return wp_strip_all_tags($fallback);
    }

    return wp_strip_all_tags(get_the_title($post_id));
}

function btc_llms_page_get_post_by_slug($slug)
{
    if (empty($slug)) {
        return null;
    }

    return get_page_by_path($slug, OBJECT, 'page');
}

function btc_llms_page_get_home_post()
{
    $front_page_id = (int) get_option('page_on_front');

    if ($front_page_id <= 0) {
        return null;
    }

    if (function_exists('pll_get_post') && btc_llms_page_is_french()) {
        $translated_id = pll_get_post($front_page_id, 'fr');
        if ($translated_id) {
            return get_post($translated_id);
        }
    }

    return get_post($front_page_id);
}

function btc_llms_page_entry_from_post($post, $fallback_label = '')
{
    if (!$post) {
        return null;
    }

    $title_fallback = $fallback_label ?: get_the_title($post);

    return array(
        'label' => btc_llms_page_get_meta_title($post->ID, $title_fallback),
        'url'   => get_permalink($post),
        'note'  => btc_llms_page_get_meta_description($post->ID, $title_fallback),
    );
}

function btc_llms_page_add_entry(array &$lines, $entry)
{
    if (empty($entry['url']) || empty($entry['label'])) {
        return;
    }

    $lines[] = '- [' . $entry['label'] . '](' . $entry['url'] . '): ' . $entry['note'];
}

function btc_llms_page_get_media_pages()
{
    $l = btc_llms_page_labels();
    $pages = array();

    foreach ($l['media_slugs'] as $slug) {
        $post = btc_llms_page_get_post_by_slug($slug);
        if ($post) {
            $pages[$post->ID] = $post;
        }
    }

    return array_values($pages);
}

function btc_llms_page_generate_content()
{
    $l = btc_llms_page_labels();
    $lines = array();

    $lines[] = '# Benin Textile Corporation (BTC)';
    $lines[] = '';
    $lines[] = '> ' . $l['site_desc'];
    $lines[] = '';
    $lines[] = '## ' . $l['section_key'];
    $lines[] = '';

    $home_post = btc_llms_page_get_home_post();
    if ($home_post) {
        btc_llms_page_add_entry($lines, btc_llms_page_entry_from_post($home_post, $l['home_fallback']));
    } else {
        $lines[] = '- [' . $l['home_fallback'] . '](' . $l['home_url'] . '): ' . $l['home_fallback'];
    }

    foreach ($l['key_slugs'] as $slug) {
        $post = btc_llms_page_get_post_by_slug($slug);
        btc_llms_page_add_entry($lines, btc_llms_page_entry_from_post($post));
    }

    $lines[] = '';

    $cats = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type'      => 'category',
        'post_status'    => 'publish',
        'meta_key'       => '_sort_order',
        'orderby'        => 'meta_value_num',
        'order'          => 'ASC',
    ));

    if ($cats->have_posts()) {
        $lines[] = '## ' . $l['section_products'];
        $lines[] = '';
        while ($cats->have_posts()) {
            $cats->the_post();
            btc_llms_page_add_entry($lines, btc_llms_page_entry_from_post(get_post()));
        }
        $lines[] = '';
        wp_reset_postdata();
    }

    $media_pages = btc_llms_page_get_media_pages();

    if (!empty($media_pages)) {
        $lines[] = '## ' . $l['section_media'];
        $lines[] = '';
        foreach ($media_pages as $media_post) {
            btc_llms_page_add_entry($lines, btc_llms_page_entry_from_post($media_post));
        }
        $lines[] = '';
    }

    $lines[] = '## ' . $l['section_contact'];
    $lines[] = '';
    $contact_post = btc_llms_page_get_post_by_slug($l['contact_slug']);
    btc_llms_page_add_entry($lines, btc_llms_page_entry_from_post($contact_post));
    $lines[] = '- Email: info.btc@arisenet.com';
    $lines[] = '- ' . $l['address_label'] . ': ' . $l['address_text'];
    $lines[] = '';

    $lines[] = '## ' . $l['section_optional'];
    $lines[] = '';
    $privacy_post = btc_llms_page_get_post_by_slug($l['privacy_slug']);
    btc_llms_page_add_entry($lines, btc_llms_page_entry_from_post($privacy_post));

    return implode("\n", $lines) . "\n";
}

$llms_labels  = btc_llms_page_labels();
$llms_content = btc_llms_page_generate_content();

if (isset($_GET['download']) && $_GET['download'] === '1') {
    nocache_headers();
    header('Content-Type: text/plain; charset=utf-8');
    header('Content-Disposition: attachment; filename="llms.txt"');
    header('Pragma: no-cache');
    header('Expires: 0');
    echo $llms_content;
    exit;
}

get_header();
?>

<style>
.llms-page-hero {
    height: 40vh;
    max-height: 400px;
    background-color: #342c7e;
    display: grid;
    place-items: center;
    text-align: center;
    padding: 0 5%;
}
.llms-page-hero h1 {
    color: #fff;
    font-size: clamp(2.5rem, 2rem + 2.5vw, 4.25rem);
    font-weight: 400;
    line-height: 1.2;
}
.llms-page-wrap {
    padding: clamp(2.5rem, 2rem + 2.5vw, 5rem) 10%;
    max-width: 1300px;
    margin: 0 auto;
}
.llms-page-wrap p {
    font-size: clamp(1rem, 0.95rem + 0.25vw, 1.25rem);
    font-weight: 300;
    color: #3b3b3b;
    margin-bottom: 24px;
    line-height: 1.6;
}
.llms-page-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    margin-bottom: 32px;
}
.llms-page-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 14px 24px;
    border: none;
    border-radius: 0;
    background: #342c7e;
    color: #fff;
    font-size: 16px;
    font-weight: 400;
    cursor: pointer;
    text-decoration: none;
    transition: background 0.2s ease, transform 0.2s ease;
}
.llms-page-btn:hover {
    background: #2a2368;
    color: #fff;
}
.llms-page-btn--secondary {
    background: #fff;
    color: #342c7e;
    border: 1px solid #342c7e;
}
.llms-page-btn--secondary:hover {
    background: #f4f3fa;
    color: #342c7e;
}
.llms-page-btn svg {
    width: 18px;
    height: 18px;
    fill: currentColor;
    flex-shrink: 0;
}
.llms-page-toast {
    display: none;
    margin-bottom: 20px;
    padding: 12px 16px;
    background: #d4ff32;
    color: #000;
    font-size: 14px;
    font-weight: 500;
}
.llms-page-toast.is-visible {
    display: block;
}
.llms-page-preview {
    background: #f7f7f7;
    border: 1px solid #e2e2e2;
    border-radius: 8px;
    padding: clamp(1.25rem, 1rem + 1.25vw, 2rem);
    overflow-x: auto;
    white-space: pre-wrap;
    word-break: break-word;
    font-family: Consolas, Monaco, "Courier New", monospace;
    font-size: 14px;
    line-height: 1.6;
    color: #222;
    margin: 0;
}
@media (max-width: 640px) {
    .llms-page-actions {
        flex-direction: column;
    }
    .llms-page-btn {
        width: 100%;
        justify-content: center;
    }
}
</style>

<section class="llms-page-hero">
    <h1><?php echo esc_html($llms_labels['page_title']); ?></h1>
</section>

<div class="llms-page-wrap">
    <p><?php echo esc_html($llms_labels['page_desc']); ?></p>

    <div class="llms-page-actions">
        <button type="button" class="llms-page-btn" id="llms-download-btn">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3v12m0 0l4-4m-4 4l-4-4M5 21h14" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <?php echo esc_html($llms_labels['download_btn']); ?>
        </button>
        <button type="button" class="llms-page-btn llms-page-btn--secondary" id="llms-copy-btn">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 8h10v10H8zM6 6h10v2H6z" stroke="currentColor" stroke-width="2" fill="none"/></svg>
            <?php echo esc_html($llms_labels['copy_btn']); ?>
        </button>
    </div>

    <div class="llms-page-toast" id="llms-toast" role="status" aria-live="polite">
        <?php echo esc_html($llms_labels['copied_msg']); ?>
    </div>

    <pre class="llms-page-preview" id="llms-preview"><?php echo esc_html($llms_content); ?></pre>
</div>

<script>
(function () {
    var previewEl = document.getElementById('llms-preview');
    var downloadBtn = document.getElementById('llms-download-btn');
    var copyBtn = document.getElementById('llms-copy-btn');
    var toastEl = document.getElementById('llms-toast');
    var copiedMsg = <?php echo wp_json_encode($llms_labels['copied_msg']); ?>;

    function getContent() {
        return previewEl ? previewEl.textContent : '';
    }

    function showToast(message) {
        if (!toastEl) return;
        toastEl.textContent = message;
        toastEl.classList.add('is-visible');
        window.setTimeout(function () {
            toastEl.classList.remove('is-visible');
        }, 2500);
    }

    function downloadLlmsTxt() {
        var content = getContent();
        if (!content) return;

        var blob = new Blob([content], { type: 'text/plain;charset=utf-8' });
        var url = URL.createObjectURL(blob);
        var link = document.createElement('a');
        link.href = url;
        link.download = 'llms.txt';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        URL.revokeObjectURL(url);
    }

    function copyLlmsTxt() {
        var content = getContent();
        if (!content) return;

        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(content).then(function () {
                showToast(copiedMsg);
            }).catch(function () {
                fallbackCopy(content);
            });
            return;
        }

        fallbackCopy(content);
    }

    function fallbackCopy(text) {
        var textarea = document.createElement('textarea');
        textarea.value = text;
        textarea.setAttribute('readonly', '');
        textarea.style.position = 'absolute';
        textarea.style.left = '-9999px';
        document.body.appendChild(textarea);
        textarea.select();
        try {
            document.execCommand('copy');
            showToast(copiedMsg);
        } catch (e) {
            showToast('Copy failed');
        }
        document.body.removeChild(textarea);
    }

    if (downloadBtn) {
        downloadBtn.addEventListener('click', downloadLlmsTxt);
    }

    if (copyBtn) {
        copyBtn.addEventListener('click', copyLlmsTxt);
    }
})();
</script>

<?php
get_footer();
?>
