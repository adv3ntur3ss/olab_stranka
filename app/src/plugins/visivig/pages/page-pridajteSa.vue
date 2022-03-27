<template>
<div>
    <layout-header/>
    <vzdelavanieJe/>
    <spajamePre/>
    <myVsetci/>
    <kNasimAktivitam/>
    <podporteNas/>
    <barboraRusinakova/>
    <openlabPosuva2/>
    <r-hr/>
    <ktoStojiZaOpenlabom/>
    <r-hr/>
    <nasaVizia/>
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
        'vzdelavanieJe': () => import('../reusables/reusables-pridajteSa/vzdelavanieJeSection/r-vzdelavanieJe.vue'),
        'spajamePre': () => import('../reusables/reusables-pridajteSa/spajamePreSection/r-spajamePre.vue'),
        'myVsetci': () => import('../reusables/reusables-pridajteSa/myVsectiSection/r-myVsetci.vue'),
        'kNasimAktivitam': () => import('../reusables/reusables-pridajteSa/kNasimAktivitamSection/r-kNasimAktivitam.vue'),
        'podporteNas': () => import('../reusables/reusables-pridajteSa/podporteNasSection/r-podporteNas.vue'),
        'barboraRusinakova': () => import('../reusables/reusables-pridajteSa/barboraRusinakovaSection/r-barboraRusinakova.vue'),
        'openlabPosuva2': () => import('../reusables/reusables-pridajteSa/openlabPosuva2Section/r-openlabPosuva2.vue'),
        'r-hr': () => import('../reusables/reusables-universal/hrSection/r-hr.vue'),
        'ktoStojiZaOpenlabom': () => import('../reusables/reusables-universal/ktoStojiZaOpenlabomSection/r-ktoStojiZaOpenlabom.vue'),
        'nasaVizia': () => import('../reusables/reusables-universal/nasaViziaSection/r-nasaVizia.vue'),
        'imagesPredDakujeme': () => import('../reusables/reusables-universal/imagesPredDakujemeSection/r-imagesPredDakujeme.vue'),
        'dakujemeZaPodporu': () => import('../reusables/reusables-universal/dakujemeZaPodporuSection/r-dakujemeZaPodporu.vue'),
        'newsletter': () => import('../reusables/reusables-universal/newsletterSection/r-newsletter.vue'),
        'layout-footer': () => import('../layout/layout-footer.vue'),
    }
        
}
</script>