<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.css">
    <style>
        body {
            padding : 40px;
        }
    </style>
<link rel="stylesheet" media="screen" type="text/css" title="Exemple" href="todo.css"/></head>
<body>
    <div id="root">
           
        <tabs>
            
			<tab name="all" :selected="true">
				<div v-for="task in tasks" :class="[{'completed' : task.completed},'round']" > <input type="checkbox" id="checkbox" :checked="task.completed" v-on:change="complet(task)" class="des">  <label for="checkbox"></label>{{ task.description }}</div>
			</tab>
			<tab name="completed">
                <div v-for="task in tasks" v-show="task.completed">{{ task.description }}</div>
			</tab>
			<tab name="active">
                <div v-for="task in tasks" v-show="!task.completed">{{ task.description }}</div>
            </tab>
            
        </tabs>
        <div class="field has-addons is-centered">
          <div class="control">
            <input v-model="newTask.description" class="input" type="text" placeholder="Ajouter une tache">
          </div>
          <div class="control">
            <a class="button is-info" v-on:click="ajoutTask">
              Ajouter
            </a>
          </div>
        </div>
           <!--  <input v-model="newTask.description" class="input is-info" type="text" placeholder="Ajouter une tache" id="1">
            <button class="button is-link"  v-on:click="ajoutTask" >Link</button> -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="tab2.js"></script>
    
</body>
</html>