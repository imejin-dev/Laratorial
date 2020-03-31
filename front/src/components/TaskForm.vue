<template>
  <div>
    <h2>Form</h2>
    <el-form label-width="100px">
      <el-form-item label="Name">
        <el-input v-model="task.name"></el-input>
      </el-form-item>
      <el-form-item class="submit">
        <el-button native-type="submit" type="primary">保存</el-button>
      </el-form-item>
    </el-form>
  </div>
</template>

<script>
export default {
  name: 'TaksForm',
  props: {
    task: {
      type: Object,
      required: true
    }
  },
  methods: {
    async submit() {
      this.$emit('submit', this.task)
    }
  },
}
</script>

<style>
.submit {
  text-align: right;
}
</style>
