<template>
  <div>
    <h2>📋 Lista de Departamentos</h2>

    <div v-if="loading">Carregando...</div>
    <div v-else-if="departments.length === 0">Nenhum departamento encontrado.</div>
    <ul v-else>
      <li v-for="dept in departments" :key="dept.id">
        {{ dept.name }}
      </li>
    </ul>

    <div v-if="error" class="error">
      Erro ao carregar departamentos: {{ error }}
    </div>
  </div>
</template>

<script>
import api from '@/services/api'

export default {
  name: 'DepartmentList',
  data() {
    return {
      departments: [],
      loading: false,
      error: null
    }
  },
  mounted() {
    this.fetchDepartments()
  },
  methods: {
    async fetchDepartments() {
      this.loading = true
      this.error = null

      try {
        const response = await api.get('/api/departments') // OBS: /api se o Laravel estiver com prefixo api
        this.departments = response.data
      } catch (err) {
        this.error = err.message
      } finally {
        this.loading = false
      }
    }
  }
}
</script>

<style scoped>
.error {
  color: red;
  margin-top: 10px;
}
</style>
