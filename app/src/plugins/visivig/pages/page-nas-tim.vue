<template>
<div>
    <layout-header/>
    <r-v-openlabe-spajame/>
    <r-images-pred-dakujeme/>
    <r-dakujeme-za-podporu/>
    <r-newsletter/>
    <layout-footer/>
</div>
</template>
<script>
export default {
    components: {
        'layout-header': () => import('@/plugins/visivig/layout/layout-header.vue'),
        'r-v-openlabe-spajame': () => import('@/plugins/visivig/reusables/reusables-nasTim/vOpenLabeSpajameSection/r-vOpenLabeSpajame.vue'),
        'r-images-pred-dakujeme': () => import('@/plugins/visivig/reusables/reusables-universal/imagesPredDakujemeSection/r-imagesPredDakujeme.vue'),
        'r-dakujeme-za-podporu': () => import('@/plugins/visivig/reusables/reusables-universal/dakujemeZaPodporuSection/r-dakujemeZaPodporu.vue'),
        'r-newsletter': () => import('@/plugins/visivig/reusables/reusables-universal/newsletterSection/r-newsletter.vue'),
        'layout-footer': () => import('@/plugins/visivig/layout/layout-footer.vue'),
    }
        
}
</script>