import { combineReducers } from "redux";
import userReducer from "./usersReducer";
import todoReducer from "./todoReducers";

const rootReducer = combineReducers({
  todos: todoReducer,
  users: userReducer,
});

export default rootReducer;
