<template>
    <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">Form</div>
                     <div class="card-body">
                        {{ name }} 
                        <input type="text" v-model="name" class="form-control"><br/>
                        Model.number: <input type="number" v-model.number="name" class="form-control"><br/>
                        Model.lazy: <input type="number" v-model.lazy="name" class="form-control">
                        <div class="form-group">
                            <label>Select Box</label>
                            <select class="form-control" v-model="select">
                                <option value="0">Option - 1</option>
                                <option value="1">Option - 2</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label>
                                {{ options.find(item=>item.value==select).gender }} selected..
                            </label>
                            <select class="form-control" v-model="select">
                                <option :value="option.value" :key="option" v-for="(option,key) in options">
                                    {{ option.gender }}
                                </option>
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <span :key="singular" v-for="(singular,key) in selects">
                                {{ options.find(item=>item.value==singular).gender }} selected..
                            </span>
                            <select class="form-control" multiple v-model="select">
                                <option :value="option.value" :key="option" v-for="(option,key) in options">
                                    {{ option.gender }}
                                </option>

                            </select>

                        </div>

                        <div class="form-group">
                            <label>Radio buttons</label><br>
                            {{ radio }}
                            <input type="radio" value="0" v-model="radio" id="zero">
                            <label for="zero">Apple</label>
                            <input type="radio" value="1" v-model="radio" id="one">
                            <label for="one">Banana</label>
                        </div>

                        <div class="form-group">
                            <label>Checkbox</label><br>
                            {{ checkbox }}
                            <input type="checkbox" value="0" v-model="checkbox" id="zero">
                            <label for="zero">Apple</label>
                            <input type="checkbox" value="1" v-model="checkbox" id="one">
                            <label for="one">Banana</label>
                        </div>

                        <div class="form-group">
                            <label>{{ name }}</label>
                            <textarea v-model="name" class="form-control"></textarea>
                        </div>
                    </div>
                 </div>
             </div>
         </div>
     </div>
 </template>
 <script>
    export default {
        data:()=>({
            name:null,
            select: 1,
            options :[
                {gender:'Select', value: 0},
                {gender: 'Female', value:1},
                {gender: 'Male', value: 2}
            ],
            selects : [0,2],
            radio:1,
            checkbox:[]
        })
    }
</script>