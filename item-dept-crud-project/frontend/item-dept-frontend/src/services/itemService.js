import api from './api'

export async function getItems() {
  return api.get('/api/items')
}

export async function createItem(data) {
  return api.post('/api/items', data)
}

export async function updateItem(id, data) {
  return api.put(`/api/items/${id}`, data)
}

export async function deleteItem(id) {
  return api.delete(`/api/items/${id}`)
}
