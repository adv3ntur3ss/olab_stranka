<template>
<div>
    <layout-header/>
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
        'layout-header': () => import('@/plugins/visivig/layout/layout-header.vue'),
        'ktoStojiZaOpenlabom': () => import('../reusables/reusables-universal/ktoStojiZaOpenlabomSection/r-ktoStojiZaOpenlabom.vue'),
        'r-hr': () => import('../reusables/reusables-universal/hrSection/r-hr.vue'),
        'nasaVizia': () => import('../reusables/reusables-universal/nasaViziaSection/r-nasaVizia.vue'),
        'imagesPredDakujeme': () => import('../reusables/reusables-universal/imagesPredDakujemeSection/r-imagesPredDakujeme.vue'),
        'dakujemeZaPodporu': () => import('../reusables/reusables-universal/dakujemeZaPodporuSection/r-dakujemeZaPodporu.vue'),
        'newsletter': () => import('../reusables/reusables-universal/newsletterSection/r-newsletter.vue'),
        'layout-footer': () => import('../layout/layout-footer.vue')
    }
        
}
</script>