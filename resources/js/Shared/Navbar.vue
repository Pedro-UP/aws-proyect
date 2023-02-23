<template>
  <nav class="bg-purple-700 flex justify-evenly p-4">
    <div>
      <span class="text-white text-x1"> Logo </span>
      <img class="inline" src="/www/8vo Semestre/aws-proyect/public/images/drago.jpg">
    </div>
    <div>
      <Link href="/" class="text-2x1 text-white mr-6 hover:bg-white 
      hover:text-indigo-400 px-4 py-2 rounded-3x1"> CHAT </Link>
      <Link href="/contacto" class="text-2x1 text-white mr-6 hover:bg-white 
      hover:text-indigo-400 px-4 py-2 rounded-3x1"> Contacto </Link>
      <Link href="/nosotros" class="text-2x1 text-white mr-6 hover:bg-white 
      hover:text-indigo-400 px-4 py-2 rounded-3x1"> Nosotros </Link>
    </div>
  </nav>
</template>

<script>
import {Link} from '@inertiajs/vue3'
export default {
    components: {
        Link,
    }
}
</script>