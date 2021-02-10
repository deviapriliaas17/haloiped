<template>
   <div class="container">
       <div class="row">
           <div class="col-4">
               <div class="card">
                   <div class="card-header">
                       ADMIN
                   </div>
                   <div class="card-body">
                       <ul class="list-group">
                           <li class="list-group-item">
                               Home
                           </li>
                           <li class="list-group-item">
                               <router-link :to="{ name: 'admin-blog' }">Blog</router-link>
                           </li>
                           <li class="list-group-item">
                               Gallery
                           </li>
                           <li class="list-group-item">
                               Layout
                               <ul class="list-group">
                                   <li class="list-group-item"><router-link :to="{ name : 'admin-layout-home'}">Home</router-link></li>
                                   <li class="list-group-item"><router-link :to="{ name : 'admin-layout-about'}">About</router-link></li>
                                   <li class="list-group-item"><router-link :to="{ name : 'admin-layout-contact'}">Contact</router-link></li>
                               </ul>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
           <div class="col-8">
               <router-view></router-view>
           </div>
       </div>
   </div>
</template>