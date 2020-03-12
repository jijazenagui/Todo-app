Vue.component('tabs',
    {
        template:`
        <div>
        <div class="tabs is-centered">
        <ul>
          <li v-for="tab in tabs" :class="{'is-active' : tab.isActive}">
          <a href="#" @click="selectTab(tab)">{{tab.name}}</a></li>
        </ul>
     
      </div>
      <div class="tabs-details"><slot></slot></div>
      </div>
      `,
      data(){
          return {
              tabs:[]
          }
      },
      created()
      {
          this.tabs = this.$children;
      },
      methods :
      {
          selectTab(selectedTab){
              this.tabs.forEach(tab => {
                  tab.isActive = (tab.name == selectedTab.name)
              })

          }
      }

    }
)
Vue.component('tab',
{
    template : `<div v-show="isActive"><slot></slot></div>`,
    props : {
        name : { required: true},
        selected : {default : false}
    },
    data(){
        return{
            isActive : false
        }
        
    },
    mounted(){
        this.active = this.selected;
    }
})
new Vue({
    el: '#root',
    data : {
        tasks : [{description:"creer page insta",completed:true},{description:"mettre du contenu",completed:false},{description:"creer musique app",completed:true}],
        newTask : {description : '', completed:false}
        
    },
    methods : {
        ajoutTask(){
            this.tasks.push({description : this.newTask.description, completed:false}); 
            this.newTask.description ='';
        }, 
        complet(check){
            this.tasks.forEach(task => {
                if (check.description == task.description)
                    task.completed = !task.completed;
            
            });
        }
    }
});