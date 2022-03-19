<template>
<div>
    <layout-header/>
    <zapojSaDoOpenlabu/>
    <programovanieDigTech/>
    <precoSaStatStudentom/>
    <r-hr/>
    <openlabPosuva/>
    <pridajteSaKNam/>
    <sliderControlCards/>
    <sliderCard/>
    <studentskeProjekty/>
    <studentskeProjektyCard/>
    <cimSmeVynimocni/>
    <ktoStojiZaOpenlabom/>
    <r-hr/>
    <nasaVizia/>
    <r-hr/>
    <napisaliONas/>
    <imagesPredDakujeme/>
    <dakujemeZaPodporu/>
    <newsletter/>
    <layout-footer/>
</div>
</template>
<script>
export default {
    components: {
        'layout-header': () => import('../layout/layout-header.vue'),
        'zapojSaDoOpenlabu': () => import('../reusables/reusables-home/zapojSaDoOpenlabuSection/r-zapojSaDoOpenlabu.vue'),
        'programovanieDigTech': () =>import('../reusables/reusables-home/programovanieDigTechSection/r-programovanieDigTech.vue'),
        'precoSaStatStudentom': () => import('../reusables/reusables-home/precoSaStatStudentomSection/r-precoSaStatStudentom.vue'),
        'r-hr': () => import('../reusables/reusables-universal/hrSection/r-hr.vue'),
        'openlabPosuva': () => import('../reusables/reusables-universal/openlabPosuvaSection/r-openlabPosuva.vue'),
        'pridajteSaKNam': () => import('../reusables/reusables-home/pridajteSaKNamSection/r-pridajteSaKNam.vue'),
        'sliderControlCards': () => import('../reusables/reusables-home/sliderControlCards/r-sliderControlCards.vue'),
        'sliderCard': () => import('../reusables/reusables-home/sliderCard/r-sliderCard.vue'),
        'studentskeProjekty': () => import('../reusables/reusables-home/studentskeProjektySection/r-studentskeProjekty.vue'),
        'studentskeProjektyCard': () => import('../reusables/reusables-home/studentskeProjektyCardSection/r-studentskeProjektyCard.vue'),
        'cimSmeVynimocni': () => import('../reusables/reusables-home/cimSmeVynimocniSection/r-cimSmeVynimocni.vue'),
        'ktoStojiZaOpenlabom': () => import('../reusables/reusables-universal/ktoStojiZaOpenlabomSection/r-ktoStojiZaOpenlabom.vue'),
        'nasaVizia': () => import('../reusables/reusables-universal/nasaViziaSection/r-nasaVizia.vue'),
        'napisaliONas': () => import('../reusables/reusables-home/napisaliONasSection/r-napisaliONas.vue'),
        'imagesPredDakujeme': () => import('../reusables/reusables-universal/imagesPredDakujemeSection/r-imagesPredDakujeme.vue'),
        'dakujemeZaPodporu': () => import('../reusables/reusables-universal/dakujemeZaPodporuSection/r-dakujemeZaPodporu.vue'),
        'newsletter': () => import('../reusables/reusables-universal/newsletterSection/r-newsletter.vue'),
        'layout-footer': () => import('../layout/layout-footer.vue'),
    }
        
}
</script>