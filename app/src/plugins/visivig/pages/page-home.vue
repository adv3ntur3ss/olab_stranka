<template>
<div>
    <layout-header/>
    <r-zapoj-sa-do-openlabu/>
    <r-programovanie-dig-tech/>
    <r-preco-sa-stat-studentom/>
    <r-hr/>
    <r-openlab-posuva/>
    <r-pridajte-sa-k-nam/>
    <r-slider-control-cards/>
    <r-slider-card/>
    <r-studentske-projekty/>
    <r-studentske-projekty-card/>
    <r-cim-sme-vynimocni/>
    <r-kto-stoji-za-openlabom/>
    <r-hr/>
    <r-nasa-vizia/>
    <r-hr/>
    <r-napisali-o-nas/>
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
        'r-zapoj-sa-do-openlabu': () => import('@/plugins/visivig/reusables/reusables-home/zapojSaDoOpenlabuSection/r-zapojSaDoOpenlabu.vue'),
        'r-programovanie-dig-tech': () =>import('@/plugins/visivig/reusables/reusables-home/programovanieDigTechSection/r-programovanieDigTech.vue'),
        'r-preco-sa-stat-studentom': () => import('@/plugins/visivig/reusables/reusables-home/precoSaStatStudentomSection/r-precoSaStatStudentom.vue'),
        'r-hr': () => import('@/plugins/visivig/reusables/reusables-universal/hrSection/r-hr.vue'),
        'r-openlab-posuva': () => import('@/plugins/visivig/reusables/reusables-universal/openlabPosuvaSection/r-openlabPosuva.vue'),
        'r-pridajte-sa-k-nam': () => import('@/plugins/visivig/reusables/reusables-home/pridajteSaKNamSection/r-pridajteSaKNam.vue'),
        'r-slider-control-cards': () => import('@/plugins/visivig/reusables/reusables-home/sliderControlCards/r-sliderControlCards.vue'),
        'r-slider-card': () => import('@/plugins/visivig/reusables/reusables-home/sliderCard/r-sliderCard.vue'),
        'r-studentske-projekty': () => import('@/plugins/visivig/reusables/reusables-home/studentskeProjektySection/r-studentskeProjekty.vue'),
        'r-studentske-projekty-card': () => import('@/plugins/visivig/reusables/reusables-home/studentskeProjektyCardSection/r-studentskeProjektyCard.vue'),
        'r-cim-sme-vynimocni': () => import('@/plugins/visivig/reusables/reusables-home/cimSmeVynimocniSection/r-cimSmeVynimocni.vue'),
        'r-kto-stoji-za-openlabom': () => import('@/plugins/visivig/reusables/reusables-universal/ktoStojiZaOpenlabomSection/r-ktoStojiZaOpenlabom.vue'),
        'r-nasa-vizia': () => import('@/plugins/visivig/reusables/reusables-universal/nasaViziaSection/r-nasaVizia.vue'),
        'r-napisali-o-nas': () => import('@/plugins/visivig/reusables/reusables-home/napisaliONasSection/r-napisaliONas.vue'),
        'r-images-pred-dakujeme': () => import('@/plugins/visivig/reusables/reusables-universal/imagesPredDakujemeSection/r-imagesPredDakujeme.vue'),
        'r-dakujeme-za-podporu': () => import('@/plugins/visivig/reusables/reusables-universal/dakujemeZaPodporuSection/r-dakujemeZaPodporu.vue'),
        'r-newsletter': () => import('@/plugins/visivig/reusables/reusables-universal/newsletterSection/r-newsletter.vue'),
        'layout-footer': () => import('@/plugins/visivig/layout/layout-footer.vue'),
    }
        
}
</script>