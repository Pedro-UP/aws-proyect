<template>
<Navbar/>
<h1>Hola desde usuario</h1>

<div class="p-8 relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre del Ususario
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="usuario in usuarios" :key="usuario.index" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{usuario.name}}</th>
                <td class="px-6 py-4">
                    {{usuario.email}}
                </td>
            </tr>
        </tbody>

    </table>
</div>
</template>

<script>
import Navbar from "../Shared/Navbar.vue";
export default {
  components: {
    Navbar,
  },
  props: {
      usuarios: Object
  }
};
</script>

