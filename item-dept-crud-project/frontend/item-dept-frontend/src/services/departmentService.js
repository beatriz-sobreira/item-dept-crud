import api from './api'

export async function getDepartments() {
  return api.get('/api/departments')
}

export async function createDepartment(data) {
  return api.post('/api/departments', data)
}

export async function updateDepartment(id, data) {
  return api.put(`/api/departments/${id}`, data)
}

export async function deleteDepartment(id) {
  return api.delete(`/api/departments/${id}`)
}
