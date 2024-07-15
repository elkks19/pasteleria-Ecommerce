<script>
export default{

}
</script>

<template>
    <!-- <div class="card"> -->
    <!---->
    <!-- </div> -->
    <p v-if="$mq">
        desktop
    </p>
    <p v-if="$mq">
        laptop
    </p>
    <p v-if="$mq">
        tablet
    </p>
    <p v-if="$mq">
        mobile
    </p>
</template>
