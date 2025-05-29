// Константы для типов действий
export const ADD_TODO = "ADD_TODO";
export const TOGGLE_TODO = "TOGGLE_TODO";

export const addTodo = (text) => ({
  type: ADD_TODO, // тип
  payload: { text }, // полезная нагрузка действия
});

export const toggleTodo = (id) => ({
  type: TOGGLE_TODO,
  payload: { id },
});
