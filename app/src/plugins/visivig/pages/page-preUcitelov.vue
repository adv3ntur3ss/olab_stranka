<template>
<div>
    <layout-header/>
    <skusenostiUcitelov/>
    <layout-footer/>
</div>
</template>
<script>
export default {
    components: {
        'layout-header': () => import('../layout/layout-header.vue'),
        'skusenostiUcitelov': () => import('../reusables/reusables-preUcitelov/skusenostiUcitelovSection/r-skusenostiUcitelov.vue'),
        'layout-footer': () => import('../layout/layout-footer.vue'),
    }
        
}
</script>