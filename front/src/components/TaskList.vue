<template>
  <el-table></el-table>
</template>

<script>
import axios from 'axios'

export default {
  name: 'TaskList',
  async created() {
    const res = await axios.get('/api/tasks')
    console.log(res)
  }
}
</script>

<style>
</style>