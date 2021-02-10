<template>
    <div class="card">
        <div class="card-header">
            Layout Blog
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
                   <label for="">Text 1</label>
                   <input type="text" v-model="contact.section_2_text" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Text 2</label>
                   <input type="text" v-model="contact.section_3_text" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Text 3</label>
                   <input type="text" v-model="contact.section_4_text" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Text 4</label>
                   <input type="text" v-model="contact.section_5_text" class="form-control">
               </div>
           </form>
        </div>
    </div>
</template>