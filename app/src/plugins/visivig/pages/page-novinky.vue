<template>
<div>
    <layout-header/>
    <layout-footer/>
</div>
</template>
<script>
export default {
    components: {
        'layout-header': () => import('@/plugins/visivig/layout/layout-header.vue'),
        'layout-footer': () => import('@/plugins/visivig/layout/layout-footer.vue')
    }
        
}
</script>