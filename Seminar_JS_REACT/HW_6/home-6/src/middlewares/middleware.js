import store from "../store/store";
import { ADD_TODO, TOGGLE_TODO } from "../actions/todoActions";

const middleware = (store) => (next) => (action) => {
  if (action.type === ADD_TODO || TOGGLE_TODO) {
    console.log("Действие:", action);
    console.log("Состояние (до):", store.getState());
  }
  return next(action);
};

export default middleware;