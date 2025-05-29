import { configureStore } from "@reduxjs/toolkit";

import middleware from "../middlewares/middleware";

import createSagaMiddleware from "redux-saga";
import usersSaga from "../sagas/usersSaga";
import rootReducer from "../reducers/rootReducers";

const sagaMiddleware = createSagaMiddleware();

const store = configureStore({
  reducer: rootReducer,
  middleware: (getDefaultMiddleware) =>
    getDefaultMiddleware().concat(middleware, sagaMiddleware),
});

sagaMiddleware.run(usersSaga);

export default store;
