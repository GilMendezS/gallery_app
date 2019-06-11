<template>
    <form @submit.prevent="onSubmit">         
        <div v-show="messageReceived" class="alert alert-info" role="alert">
            {{messageReceived}}
        </div>          
        <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
                <label class="text-black" for="fname"><i class="fa fa-user"></i> Nombre</label>
                <input type="text" v-model="name" id="fname" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
            <label class="text-black" for="email"><i class="fa fa-envelope"></i> Email</label> 
            <input type="email" id="email" v-model="email" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
            <label class="text-black" for="subject"><i class="fa fa-bookmark"></i> Asunto</label> 
            <input type="subject" id="subject" v-model="subject" class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
            <label class="text-black" for="message"><i class="fa fa-comment"></i> Mensaje</label> 
            <textarea name="message" id="message" v-model="message" cols="30" rows="7" class="form-control" placeholder="Escribe tus comentarios o preguntas aquí..."></textarea>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
            <input :disabled="invalidForm || makingApiCall" type="submit" value="Enviar Mensaje" class="btn btn-primary py-2 px-4 text-white">
            </div>
        </div>
    </form>
</template>
<script>
export default {
    mounted(){
        this.token = $('meta[name="csrf-token"]').attr('content');
        
    },
    data: () => ({
        token: '',
        name: '',
        email:'',
        subject:'',
        message:'',
        messageReceived: '',
        makingApiCall: false
    }),
    methods: {
        onSubmit(){
            this.messageReceived = '';
            this.makingApiCall = true;
            fetch('/contact',{
                method: 'POST',
                headers: {
                    'Content-Type':'application/json',
                     'X-CSRF-TOKEN': this.token
                },
                body: JSON.stringify({
                    name: this.name,
                    email: this.email,
                    subject: this.subject,
                    message: this.message
                })
            })
            .then(res => res.json())
            .then(data => {
                if(data.sucess){
                    this.name = '';
                    this.email = '';
                    this.subject = '';
                    this.message = '';
                    
                }
                this.messageReceived = data.message;
                
            })
            .catch(err => {
                this.messageReceived = 'Ha surgido un erro al enviar tu mensaje,por favor intentalo mas tarde';
            })
            .finally(() => {
                this.makingApiCall = false;
            })
        }
    },
    computed: {
        invalidForm(){
            return this.name == '' || this.email == '' || this.subject == '' || this.message == ''
        }
    }
}
</script>
