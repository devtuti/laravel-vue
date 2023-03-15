<template>
    <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">Class & Style</div>
                     <div class="card-body">
                        <p v-bind:class="{'text-success':green,'text-danger':red}">Hello world. My name is Turkan</p>
                        <button @click="green=!green">Text success</button>
                        <button @click="red=!red">Text danger</button>
                        <br/>

                        <label>Name</label>
                        <input type="text" v-model="user_name" class="form-control" v-bind:class="{'is-invalid': user_name==null}">
                        <label>Email</label>
                        <input type="email" v-model="email" class="form-control" v-bind:class="[email.length > 3 ? 'is-valid' : 'is-invalid']">
                        <br/>

                        <p v-bind:style="newStyle">Lorem ipsum dollar set bla bla bla</p>
                        <p v-bind:style="{color:newStyle.color}">Lorem ipsum dollar set bla bla bla</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                green:false,
                red:false,
                user_name: null,
                email: '',
                newStyle: {
                    color: 'blue',
                    fontSize: '24px',
                
                }
            }

        }
    }
</script>