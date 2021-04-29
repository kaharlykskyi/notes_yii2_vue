import httpClient from "./http.service";

const notesService = {
    create(note) {
        return httpClient.post('note', note)
    },
    get() {
        return httpClient.get('note?sort=-created_at')
    },
    update(note) {
        return httpClient.put(`note/${note.id}`, note)
    },
    delete(noteId) {
        return httpClient.delete(`note/${noteId}`)
    }
};

export default notesService;