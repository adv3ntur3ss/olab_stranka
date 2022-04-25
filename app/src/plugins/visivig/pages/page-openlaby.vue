<template>
<div>
    <layout-header/>
    <r-co-sa-uci/>
    <r-kto-stoji-za-openlabom/>
    <r-hr/>
    <r-nasa-vizia/>
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
        'r-co-sa-uci': () => import('@/plugins/visivig/reusables/reusables-openlaby/coSaUciSection/r-coSaUci.vue'),
        'r-kto-stoji-za-openlabom': () => import('@/plugins/visivig/reusables/reusables-universal/ktoStojiZaOpenlabomSection/r-ktoStojiZaOpenlabom.vue'),
        'r-hr': () => import('@/plugins/visivig/reusables/reusables-universal/hrSection/r-hr.vue'),
        'r-nasa-vizia': () => import('@/plugins/visivig/reusables/reusables-universal/nasaViziaSection/r-nasaVizia.vue'),
        'r-images-pred-dakujeme': () => import('@/plugins/visivig/reusables/reusables-universal/imagesPredDakujemeSection/r-imagesPredDakujeme.vue'),
        'r-dakujeme-za-podporu': () => import('@/plugins/visivig/reusables/reusables-universal/dakujemeZaPodporuSection/r-dakujemeZaPodporu.vue'),
        'r-newsletter': () => import('@/plugins/visivig/reusables/reusables-universal/newsletterSection/r-newsletter.vue'),
        'layout-footer': () => import('@/plugins/visivig/layout/layout-footer.vue')
    }
        
}
</script>