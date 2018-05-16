<template>
  <div>
        <p>
            <router-link :to="{ name: 'index' }">Dashboard</router-link> |
            <router-link :to="{ name: 'invoice' }">Factura</router-link> |
            <router-link :to="{ name: 'calendar' }">Calendario</router-link> |
            <router-link :to="{ name: 'mailbox' }">Bandeja</router-link> |
            <router-link :to="{ name: 'user' }">Perfil</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
  </div>
</template>