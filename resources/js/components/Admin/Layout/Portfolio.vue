<template>
    <div class="card">
        <div class="card-header">
            Layout Portfolio
        </div>
        <div class="card-body">
           <form action="">
               <div class="form-group">
                   <label for="">Header 1</label>
                   <input type="text" v-model="contact.section_1_header" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Title 1</label>
                   <input type="text" v-model="contact.section_1_title" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Description 1</label>
                   <input type="text" v-model="contact.section_1_description" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Image 1</label>
                   <input type="file"  class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Title 2</label>
                   <input type="text" v-model="contact.section_2_title" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Description 2</label>
                   <input type="text" v-model="contact.section_2_Description" class="form-control">
               </div>
           </form>
        </div>
    </div>
</template>