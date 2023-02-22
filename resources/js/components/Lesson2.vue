<template>
    <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">Varriable</div>
                     <div class="card-body">
                         Welcome, <br />
                         <button class="btn btn-primary" @click="ageCounter">Age Counter</button>
                         <h5 v-if="age>=30">
                            What are you name? My name is <span v-html="firstName"></span>. I am {{ age }} years old...
                        </h5>
                         <h5 v-else>No entry!!!</h5>
                         <p>What do you like fruit?</p>
                         <ul class="list-group">
                            <li :key="fruit" v-for="(fruit,key) in fruits" class="list-group-item">
                                {{key+ '-' +fruit }} 
                                
                            </li>
                         </ul><br/>
                         <h1>Users</h1>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item" :key="user" v-for="(user,key) in users">
                                {{ user.user_name+ '-' +user.user_age}}
                            </li>
                         </ul>

                         <p>Do you like this a lesson?</p>
                         <button type="button" class="btn btn-primary btn-sm" @click="lessonLiked('+',1)">Like</button> {{ liked }}
                         <button type="button" class="btn btn-danger btn-sm" @click="lessonLiked('-',1)">Dislike</button>
                    </div>
                 </div>
             </div>
         </div>
     </div>
 </template>
 <script>
     export default{
        data(){
            return {
                firstName: '<b>Turkan</b>',
                age: 29,
                liked:null,
                fruits: ['apple', 'banana','pear','grape'],
                users: [
                    {user_name: 'Yusif', user_age: 20, gender: 'male'},
                    {user_name: 'Nur', user_age: 18, gender: 'female'}
                ]
            }
        },
        methods: {
            ageCounter(){
                this.age++
            },
            lessonLiked(comand,value){
                if(comand=='+'){
                    this.liked+=value
                }else{
                    if(this.liked>0){
                        this.liked-=value
                    }
                    
                }
            }
        }
     }
 </script>
 <style>
 </style>