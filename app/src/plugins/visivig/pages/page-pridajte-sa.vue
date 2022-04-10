<template>
<div>
    <layout-header/>
    <r-vzdelavanie-je/>
    <r-spajame-pre/>
    <r-my-vsetci/>
    <r-k-nasim-aktivitam/>
    <r-podporte-nas/>
    <r-barbora-rusinakova/>
    <r-openlab-posuva2/>
    <r-hr/>
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
        'r-vzdelavanie-je': () => import('@/plugins/visivig/reusables/reusables-pridajteSa/vzdelavanieJeSection/r-vzdelavanieJe.vue'),
        'r-spajame-pre': () => import('@/plugins/visivig/reusables/reusables-pridajteSa/spajamePreSection/r-spajamePre.vue'),
        'r-my-vsetci': () => import('@/plugins/visivig/reusables/reusables-pridajteSa/myVsectiSection/r-myVsetci.vue'),
        'r-k-nasim-aktivitam': () => import('@/plugins/visivig/reusables/reusables-pridajteSa/kNasimAktivitamSection/r-kNasimAktivitam.vue'),
        'r-podporte-nas': () => import('@/plugins/visivig/reusables/reusables-pridajteSa/podporteNasSection/r-podporteNas.vue'),
        'r-barbora-rusinakova': () => import('@/plugins/visivig/reusables/reusables-pridajteSa/barboraRusinakovaSection/r-barboraRusinakova.vue'),
        'r-openlab-posuva2': () => import('@/plugins/visivig/reusables/reusables-pridajteSa/openlabPosuva2Section/r-openlabPosuva2.vue'),
        'r-hr': () => import('@/plugins/visivig/reusables/reusables-universal/hrSection/r-hr.vue'),
        'r-kto-stoji-za-openlabom': () => import('@/plugins/visivig/reusables/reusables-universal/ktoStojiZaOpenlabomSection/r-ktoStojiZaOpenlabom.vue'),
        'r-nasa-vizia': () => import('@/plugins/visivig/reusables/reusables-universal/nasaViziaSection/r-nasaVizia.vue'),
        'r-images-pred-dakujeme': () => import('@/plugins/visivig/reusables/reusables-universal/imagesPredDakujemeSection/r-imagesPredDakujeme.vue'),
        'r-dakujeme-za-podporu': () => import('@/plugins/visivig/reusables/reusables-universal/dakujemeZaPodporuSection/r-dakujemeZaPodporu.vue'),
        'r-newsletter': () => import('@/plugins/visivig/reusables/reusables-universal/newsletterSection/r-newsletter.vue'),
        'layout-footer': () => import('@/plugins/visivig/layout/layout-footer.vue'),
    }
        
}
</script>