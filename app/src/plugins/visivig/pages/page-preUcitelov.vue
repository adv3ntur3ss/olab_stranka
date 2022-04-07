<template>
<div>
    <layout-header/>
    <miliUcitelia/>
    <openAcademy/>
    <akeTemy/>
    <drilleo/>
    <dakujemeZaSpolupracu/>
    <skusenostiUcitelov/>
    <layout-footer/>
</div>
</template>
<script>
export default {
    components: {
        'layout-header': () => import('@/plugins/visivig/layout/layout-header.vue'),
        'miliUcitelia': () => import('../reusables/reusables-preUcitelov/miliUciteliaSection/r-miliUcitelia.vue'),
        'openAcademy': () => import('../reusables/reusables-preUcitelov/openAcademySection/r-openAcademy.vue'),
        'akeTemy': () => import('../reusables/reusables-preUcitelov/akeTemySection/r-akeTemy.vue'),
        'drilleo': () =>import('../reusables/reusables-preUcitelov/drilleoSection/r-drilleo.vue'),
        'dakujemeZaSpolupracu': () => import('../reusables/reusables-preUcitelov/dakujemeZaSpolupracuSection/r-dakujemeZaSpolupracu.vue'),
        'skusenostiUcitelov': () => import('../reusables/reusables-preUcitelov/skusenostiUcitelovSection/r-skusenostiUcitelov.vue'),
        'layout-footer': () => import('../layout/layout-footer.vue'),
    }
        
}
</script>