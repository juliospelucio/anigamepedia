<template>
  <div class="my-2">
    <div class="card bg-light border-dark" style="width: 18rem;">
      <img class="card-img-top" src="/img/img-200.svg" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title text-center">
          <a v-bind:href="'/anime/' + anime.id" target="_blank">{{anime.name}}</a>
        </h5>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["anime"],
};
</script>

<style scoped>
</style>