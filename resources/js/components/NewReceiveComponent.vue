<template>
  <v-row justify="center">
    <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">

      <v-card>
        <v-toolbar dark color="main_green">
          <v-btn icon dark @click="dialog = false">
            <v-icon>close</v-icon>
          </v-btn>
          <v-toolbar-title>Recepción de residuos, Generador NO registrado</v-toolbar-title>
          <v-spacer></v-spacer>
        </v-toolbar>

                <v-card class="px-5">
                    <br>

                    <v-layout>
                        <v-flex  xs3 class="pr-1">
                            <v-text-field v-model="this.correlative"  readonly='true' label="Folio"></v-text-field>
                        </v-flex>

                        <v-flex xs3 class="px-1">
                            <v-text-field v-model="this.rut" label="Rut"></v-text-field>
                        </v-flex>
                        <v-flex xs2 class="px-1 py-2">

                            <v-btn  class="ma-2 white--text" color='main_green' @click='validateSii' >

                            Validar SII    
                            <v-icon>done</v-icon>
                            </v-btn>
                        </v-flex>


                    </v-layout>

                    <v-layout>
                        <v-flex xs3 class="px-1">
                            <v-text-field v-model="this.company" readonly='true' label="Empresa"></v-text-field>
                        </v-flex>
 
                        <v-flex xs3 class="px-1">
                            <v-text-field v-model="this.address" readonly='true'  label="Dirección"></v-text-field>
                        </v-flex>

                        <v-flex xs3 class="px-1">
                            <v-text-field v-model="this.commune"  label="Comuna"></v-text-field>
                        </v-flex>

                        <v-flex xs3 class="px-1">
                            <v-text-field v-model="this.region" readonly='true' label="Región"></v-text-field>
                        </v-flex>
                    </v-layout>
                    <v-layout>
                        <v-flex xs3 class="px-1">
                            <v-text-field v-model="this.$store.getters.user.name" readonly='true' label="Declarado Por"></v-text-field>
                        </v-flex>

                        <v-flex xs3 class="px-1">
                            <v-select
                                :items="types"
                                v-model="type"
                                label="Tipo Reporte"
                            ></v-select> 

                        </v-flex>

                        <v-flex xs3 class="px-1">

  <v-menu
        ref="menu"
        v-model="menu"
        :close-on-content-click="false"
        :nudge-right="40"
        :return-value.sync="date"
        lazy
        transition="scale-transition"
        offset-y
        full-width
        max-width="290px"
        min-width="290px"
      >
        <template v-slot:activator="{ on }">
          <v-text-field
            v-model="period"
            label="Periodo"
            prepend-icon="event"
            readonly
            v-on="on"
          ></v-text-field>
        </template>
        <v-date-picker
          v-model="period"
          type="month"
          no-title
          scrollable
        >
          <v-spacer></v-spacer>
          <v-btn flat color="primary" @click="menu = false">Cancel</v-btn>
          <v-btn flat color="primary" @click="$refs.menu.save(date)">OK</v-btn>
        </v-date-picker>
      </v-menu>

<!--                             <v-select
                                :items="periods"
                                v-model="period"
                                label="Periodo"
                            ></v-select> -->
                        </v-flex>
                    </v-layout>



                </v-card>
        

          

                <v-card v-if="this.$store.getters.type=='GeneradorMunicipal'" class="px-5">
                    <br>
                    <v-layout>
                        <v-flex xs3 class="px-1">
                            <h4>Información para SUBDERE</h4>
                        </v-flex>
                    </v-layout>    
                    <v-layout>
                        <v-flex xs2 class="px-1">
                            <h5>Cobertura Servicios Aseo</h5>
                        </v-flex>
                        
                        <v-flex xs2 class="px-1">
                            <v-text-field  label="Urbana %"></v-text-field>
                        </v-flex>
                        <v-flex xs2 class="px-1">
                            <v-text-field  label="Rural %"></v-text-field>
                        </v-flex>
                        <v-flex xs2 class="px-1">
                            <h5>Frecuencia recolección Días por semana</h5>
                        </v-flex>
                        <v-flex xs2 class="px-1">
                            <v-text-field  label="Zona Urbana"></v-text-field>
                        </v-flex>
                        <v-flex xs2 class="px-1">
                            <v-text-field  label="Zona Rural"></v-text-field>
                        </v-flex>
                    </v-layout>
                    <v-layout>   
                        <v-flex xs1 class="px-1">
                            <h5>Costos</h5>
                        </v-flex>
                        <v-flex xs3 class="px-1">
                            <v-text-field  label="Recolección y transporte $/año"></v-text-field>
                        </v-flex>
                        <v-flex xs3 class="px-1">
                            <v-text-field  label="Tonelada recolectada $/tonelada "></v-text-field>
                        </v-flex>
                        <v-flex xs3 class="px-1">
                            <v-text-field  label="Disposición final $/año "></v-text-field>
                        </v-flex>
                        <v-flex xs3 class="px-1">
                            <v-text-field  label="Tonelada dispuesta $/tonelada"></v-text-field>
                        </v-flex>
                    </v-layout>
                    <v-layout> 

                        <v-flex xs1 class="px-1">
                            <h5>Recaudación</h5>
                        </v-flex>
                        <v-flex xs4 class="px-1">
                            <v-text-field  label="Por derecho de aseo $/año"></v-text-field>
                        </v-flex>
                    </v-layout>
                </v-card>


        <v-toolbar  color="secondary_green" dark>
            <v-toolbar-title >Residuos</v-toolbar-title>
        <v-spacer></v-spacer>
            <v-btn  v-if="this.declaration.status!='ENVIADA'" class="ma-2 white--text" @click='toNewResidue' color="main_green">
                Agregar
                <v-icon right>add</v-icon>
            </v-btn>          
        
            <v-btn v-if="this.declaration.status!='ENVIADA'" @click='toUpload' color="main_green">Subir Excel
                <v-icon right>cloud_upload</v-icon>
            </v-btn>
            <!-- <v-btn v-if="this.declaration.status!='ENVIADA'" @click='toSendMail' color="main_green">Prueba Mail</v-btn> -->
        </v-toolbar>
        <v-data-table
          :headers="headers"
          :items="residues"
          class="elevation-1"
          v-if="this.declaration.status!='ENVIADA'"
        >
          <template v-slot:items="props">
            <td class="text-xs-left">{{ props.item.waste }}</td>
            <td class="text-xs-left">{{ props.item.quantity }}</td>
            <td class="text-xs-left">{{ props.item.company }}</td>
            <td class="text-xs-left">{{ props.item.establishment }}</td>



            <td  class="justify-center layout px-0">

                <v-btn icon  @click="edit_item(props.item, props.index)" >
                    <v-icon>edit</v-icon>
                </v-btn>


                <v-btn  icon @click="delete_item(props.index)" >

                    <v-icon>delete</v-icon>
                </v-btn>
            </td>   

          </template>
        </v-data-table>

        <v-data-table
          :headers="headers"
          :items="residues"
          class="elevation-1"
          v-if="this.declaration.status=='ENVIADA'"
        >
          <template v-slot:items="props">
            <td class="text-xs-left">{{ props.item.waste }}</td>
            <td class="text-xs-left">{{ props.item.quantity }}</td>
            <td class="text-xs-left">{{ props.item.company }}</td>
            <td class="text-xs-left">{{ props.item.establishment }}</td>


          </template>
        </v-data-table>

             <v-layout>
                <v-flex xs10 class="px-1">
                </v-flex>
                <v-flex xs2 class="px-1">
                    
                    <v-btn v-if="this.declaration.status!='ENVIADA'" class="ma-2 white--text" color="main_green"  @click="createdeclaration()">
                        Guardar
                        <v-icon right>save</v-icon>
                    </v-btn>
                </v-flex>
            </v-layout>        

      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>

  import Vue from 'vue';  
  import Vuex from 'vuex'; 
  import { mapState } from 'vuex';  
  
  import { EventBus } from './../eventbus.js';
  import { EventBus2 } from './../eventbus2.js';

 
  import NewReceiveResidueComponent  from './../components/NewReceiveResidueComponent';
  import UploadComponent  from './../components/UploadComponent';
  

  export default {
    props: {
        declaration_edit: Object,
    },
    data () {
      return {
        dialog: true,
        notifications: false,

        type: 'D.S.N°1/2013 MMA (Mensual)',
        types: ['D.S.N°1/2013 MMA (Mensual)'],

       
        period: new Date().toISOString().substr(0, 7),
        menu: false,
        modal: false,

        correlative:'',
        company:'',
        rut:'11333777-9',
        establishment:'',
        address:'',
        commune:'',
        region:'',

        generator:'',


        headers: [
            { text: 'Descripción del Residuo', value: '' },            
            { text: 'Cantidad(t)', value: '' },
            { text: 'Destinatario', value: '' },
            { text: 'Nombre Establecimiento', value: '' },

        ],


        residues: [
        ],

        declaration:  {},

      }
    },
    
    created () {
        this.initialize();


        var app = this;
        EventBus.$on('saveResidues', function(){   
            app.refreshList();
        });

    },

    methods: {
        initialize(){
          
            var app = this;

            if(this.declaration_edit){
               

                app.declaration = app.declaration_edit;
                app.correlative = app.declaration_edit.correlative + '-' + app.declaration_edit.correlative_dv;  
                app.company     = app.declaration_edit.company;
                app.address     = app.declaration_edit.direccion;
                app.commune     = app.declaration_edit.comuna;
                app.region      = app.declaration_edit.region;

                axios.get('/api/waste_details/'+app.declaration_edit.id)
                    .then(function (resp) {    
                        app.residues = resp.data;
                    })
                    .catch(function (resp) {
                        console.log(resp);
                    }); 

            } else {
                axios.post('/api/declaration/create')
                    .then(function (resp) {    
                        app.declaration = resp.data;
                        app.correlative    = app.declaration.correlative + '-' + app.declaration.correlative_dv; 
                    })
                    .catch(function (resp) {
                        console.log(resp);
                    });                
            }
        },  


        searchSii(){

            alert('Validación SII, pendiente')

            var app = this;
            axios.get('/api/company/search_sii/'+this.rut)
                .then(function (resp) {    


                    app.generator = resp.data;

                    app.company        = app.generator.company_name;
                    app.rut            = app.generator.rut + '-' + app.generator.digit;
                    app.address        = app.generator.street + app.generator.number;
                    app.commune        = app.generator.commune_name;
                    app.region         = app.generator.region_name;

                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Error generatorSII :" + resp);
                }); 



        },

        createdeclaration(){

            var app=this;

            var declaration = {
                correlative: this.declaration.correlative,
                correlative_dv: this.declaration.correlative_dv,
                rut: this.rut,
                company: this.company,
                establishment: this.establishment,
                direccion: this.address,
                comuna: this.commune,
                region: this.region,
                type: this.type,
                period: this.period,
                generator:'UNREGISTERED',
                carrier: 0,
                waste_detail: this.residues,
            }

            if(this.residues.length>0){

                axios.post('/api/declaration/store', {declaration: declaration})
                    .then(function (resp) {    
                        EventBus2.$emit('save', 'someValue');
                        app.dialog = false;
                        EventBus.$off();
                    })
                    .catch(function (resp) {
                        console.log(resp);
                    });

            } else {
                alert('No se han ingresado residuos');
            }

        },



        toNewResidue (){

                var ComponentReserv = Vue.extend(NewReceiveResidueComponent)
                var instance = new ComponentReserv({store: this.$store, propsData: { 
                }});
                instance.$mount();
                this.$refs.container.replaceChild(instance.$el);
        },


        edit_item(item, index){
            
            this.$store.commit('changeIndexedit', index);   
            
            var ComponentReserv = Vue.extend(NewReceiveResidueComponent)
            var instance = new ComponentReserv({store: this.$store, propsData: {
            residue_edit: item, 
            }});
            instance.$mount();
            this.$refs.container.replaceChild(instance.$el);


        },

        refreshList(){

            if(this.$store.getters.indexedit == -1){
                this.residues.push(this.$store.getters.residue);
            } else {

                this.residues.splice(this.$store.getters.indexedit, 1, this.$store.getters.residue);
                this.$store.commit('changeIndexedit', -1);
            }


        },   

 


        delete_item(index){

            this.residues.splice(index,1);

        },  

        toUpload(){

                var ComponentReserv = Vue.extend(UploadComponent)
                var instance = new ComponentReserv({store: this.$store, propsData: {
                residue_edit: '', 
                }});
                instance.$mount();
                this.$refs.container.replaceChild(instance.$el);

        },

        toSendMail(){

            axios.get('/api/notification/mail')
                .then(function (resp) {    
                    app.vehicles = resp.data;
                // alert(JSON.stringify(resp.data));
                })
                .catch(function (resp) {
                    console.log(resp);
                });
        },

        validateSii () {
            this.searchSii();
        },

    }

  }
</script>