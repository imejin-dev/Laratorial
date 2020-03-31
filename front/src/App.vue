<template>
  <div id="app">
    <h1>Laratorial</h1>
    <div class="wrapper">
      <task-list :tasks="tasks" @edit="edit" @remove="remove" @new="newTask" class="task-list"></task-list>
      <task-form @submit="submit" :task="editingTask" class="task-form"></task-form>
    </div>
  </div>
</template>

<script>
import TaskList from './components/TaskList.vue'
import TaskForm from './components/TaskForm.vue'
import axios from 'axios'

const newTask = { id: null, name: '' }

export default {
  name: 'App',
  components: { TaskList, TaskForm },
  data() {
    return {
      tasks: [
        { id: 1, name: 'sample' }
      ],
      editingTask: { ...newTask }
    }
  },
  async created() {
    // const res = await axios.get('/api/tasks')
    // this.tasks = res.data
  },
  methods: {
    async submit(data) {
      if (data.id) {
        const res = await axios.put(`/api/tasks/${data.id}`, data)
        console.log(res)
        let idx
        this.tasks.forEach((task, i) => {
          if (task.id === data.id) {
            idx = i
          }
        })
        this.tasks[idx] = res.data
      } else {
        const res = await axios.post('/api/tasks', data)
        console.log(res)
        this.tasks.push(res.data)
      }
    },
    edit(id) {
      const task = this.tasks.find(task => task.id === id)
      this.editingTask = { ...task }
    },
    async remove(id) {
      const res = await axios.delete(`/api/tasks/${id}`)
      console.log(res)
      this.tasks = this.tasks.filter(task => task.id !== id)
    },
    newTask() {
      this.editingTask = { ...newTask }
    }
  },
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

.wrapper {
  display: flex;
  max-width: 1020px;
  margin: auto;
}
.task-list, .task-form {
  flex: 1;
}
</style>
