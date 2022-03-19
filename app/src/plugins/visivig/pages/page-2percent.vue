<template>
<div>
    <layout-header/>
    <layout-footer/>
</div>
</template>
<script>
export default {
    components: {
        'layout-header': () => import('../layout/layout-header.vue'),
        'layout-footer': () => import('../layout/layout-footer.vue'),
    }
        
}
</script>