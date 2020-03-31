<template>
  <div>
    <h2>List</h2>
    <el-table :data="tasks">
      <el-table-column prop="id" label="ID"></el-table-column>
      <el-table-column prop="name" label="Name"></el-table-column>
      <el-table-column prop="" label="">
        <div class="actions" slot-scope="task">
          <el-button type="text" @click="edit(task.row.id)"><i class="el-icon-edit"></i></el-button>
          <el-button class="delete-btn" type="text" @click="remove(task.row.id)"><i class="el-icon-delete"></i></el-button>
        </div>
      </el-table-column>
    </el-table>
    <el-button type="primary" @click="newTask">New</el-button>
  </div>
</template>

<script>
export default {
  name: 'TaskList',
  props: {
    tasks: {
      type: Array,
      requried: true
    }
  },
  methods: {
    remove(id) {
      this.$emit('remove', id)
    },
    edit(id) {
      this.$emit('edit', id)
    },
    newTask() {
      this.$emit('new')
    }
  },
}
</script>

<style scoped>
.actions {
  text-align: right;
}
.delete-btn {
  color: red;
}
</style>