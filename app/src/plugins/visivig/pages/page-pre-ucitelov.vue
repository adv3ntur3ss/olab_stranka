<template>
<div>
    <layout-header/>
    <r-mili-ucitelia/>
    <r-open-academy/>
    <r-ake-temy/>
    <r-drilleo/>
    <r-dakujeme-za-spolupracu/>
    <r-skusenosti-ucitelov/>
    <layout-footer/>
</div>
</template>
<script>
export default {
    components: {
        'layout-header': () => import('@/plugins/visivig/layout/layout-header.vue'),
        'r-mili-ucitelia': () => import('@/plugins/visivig/reusables/reusables-preUcitelov/miliUciteliaSection/r-miliUcitelia.vue'),
        'r-open-academy': () => import('@/plugins/visivig/reusables/reusables-preUcitelov/openAcademySection/r-openAcademy.vue'),
        'r-ake-temy': () => import('@/plugins/visivig/reusables/reusables-preUcitelov/akeTemySection/r-akeTemy.vue'),
        'r-drilleo': () =>import('@/plugins/visivig/reusables/reusables-preUcitelov/drilleoSection/r-drilleo.vue'),
        'r-dakujeme-za-spolupracu': () => import('@/plugins/visivig/reusables/reusables-preUcitelov/dakujemeZaSpolupracuSection/r-dakujemeZaSpolupracu.vue'),
        'r-skusenosti-ucitelov': () => import('@/plugins/visivig/reusables/reusables-preUcitelov/skusenostiUcitelovSection/r-skusenostiUcitelov.vue'),
        'layout-footer': () => import('@/plugins/visivig/layout/layout-footer.vue'),
    }
        
}
</script>