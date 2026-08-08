<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Build Schema for Breadcrumbs
$schema_items = [];
$schema_items[] = [
    '@type' => 'ListItem',
    'position' => 1,
    'name' => 'Home',
    'item' => site_url()
];

$position = 2;
if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    foreach ($breadcrumbs as $crumb) {
        $name = isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '');
        $url = (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)') ? $crumb['url'] : null;

        $item = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $name
        ];
        if ($url) {
            $item['item'] = $url;
        }
        $schema_items[] = $item;
        $position++;
    }
} else if (isset($bc_current) && !empty($bc_current)) {
    $schema_items[] = [
        '@type' => 'ListItem',
        'position' => $position,
        'name' => $bc_current
    ];
}

$schema_json = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $schema_items
];
?>

<script type="application/ld+json">
<?= json_encode($schema_json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- Styled White Breadcrumb Section -->
<section class="dynamic-bc-section">
    <div class="container d-flex flex-column align-items-start">
        <!-- Row 1: Breadcrumb Navigation Pill -->
        <nav class="dyn-bc-nav" aria-label="breadcrumb">
            <a href="<?= site_url() ?>" class="dyn-bc-link">
                <span class="bc-home-icon"><i class="bi bi-house-door-fill"></i></span>
                <span>Home</span>
            </a>
            <?php if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)): ?>
                <?php foreach ($breadcrumbs as $crumb): ?>
                    <i class="bi bi-chevron-right dyn-bc-sep"></i>
                    <?php if (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)'): ?>
                        <a href="<?= $crumb['url'] ?>" class="dyn-bc-link"><?= isset($crumb['name']) ? $crumb['name'] : $crumb['title'] ?></a>
                    <?php else: ?>
                        <span class="dyn-bc-current"><?= isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '') ?></span>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <i class="bi bi-chevron-right dyn-bc-sep"></i>
                <span class="dyn-bc-current"><?= isset($bc_current) ? $bc_current : '' ?></span>
            <?php endif; ?>
        </nav>

        <!-- Row 2: Page H1 Title -->
        <h1 class="dyn-bc-title"><?= isset($bc_h1) ? $bc_h1 : '' ?></h1>

        <!-- Row 3: Page Description -->
        <?php if (isset($bc_desc) && !empty($bc_desc)): ?>
            <p class="dyn-bc-desc"><?= $bc_desc ?></p>
        <?php endif; ?>
    </div>
</section>