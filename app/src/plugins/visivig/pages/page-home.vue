<template>
<div>
    <layout-header/>
    <r-hr/>
    <openlabPosuva/>
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
        'layout-footer': () => import('../layout/layout-footer.vue'),
        'dakujemeZaPodporu': () => import('../reusables/reusables-universal/dakujemeZaPodporuSection/r-dakujemeZaPodporu.vue'),
        'imagesPredDakujeme': () => import('../reusables/reusables-universal/imagesPredDakujemeSection/r-imagesPredDakujeme.vue'),
        'newsletter': () => import('../reusables/reusables-universal/newsletterSection/r-newsletter.vue'),
        'napisaliONas': () => import('../reusables/reusables-home/napisaliONasSection/r-napisaliONas.vue'),
        'r-hr': () => import('../reusables/reusables-universal/hrSection/r-hr.vue'),
        'nasaVizia': () => import('../reusables/reusables-universal/nasaViziaSection/r-nasaVizia.vue'),
        'ktoStojiZaOpenlabom': () => import('../reusables/reusables-universal/ktoStojiZaOpenlabomSection/r-ktoStojiZaOpenlabom.vue'),
        'openlabPosuva': () => import('../reusables/reusables-universal/openlabPosuvaSection/r-openlabPosuva.vue')
    }
        
}
</script>