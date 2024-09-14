<template>
  <div>
    <h1>To-do List</h1>

    <!-- Input field to add new to-do -->
    <input type="text" v-model="newToDo" placeholder="Enter new to-do" />
    <button @click="addToDo">Add</button>

    <!-- Display the list of to-dos -->
    <ul>
      <li v-for="todo in todos" :key="todo.id">
        <span :class="{ completed: todo.completed }">{{ todo.title }}</span>
        <button @click="toggleComplete(todo)">Toggle Complete</button>
        <button @click="deleteToDo(todo.id)">Delete</button>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      newToDo: '',
      todos: []
    };
  },
  mounted() {
    this.fetchToDos();
  },
  methods: {
    fetchToDos() {
      axios.get('/api/todos')
        .then(response => {
          this.todos = response.data;
        });
    },
    addToDo() {
      axios.post('/api/todos', { title: this.newToDo })
        .then(response => {
          this.todos.push(response.data);
          this.newToDo = '';
        });
    },
    toggleComplete(todo) {
      axios.put(`/api/todos/${todo.id}`, { completed: !todo.completed })
        .then(response => {
          todo.completed = response.data.completed;
        });
    },
    deleteToDo(id) {
      axios.delete(`/api/todos/${id}`)
        .then(() => {
          this.todos = this.todos.filter(todo => todo.id !== id);
        });
    }
  }
}
</script>

<style scoped>
.completed {
  text-decoration: line-through;
}
</style>

