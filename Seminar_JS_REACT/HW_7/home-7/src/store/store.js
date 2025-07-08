import { configureStore } from '@reduxjs/toolkit';
import tasksReducer from '../reducers/tasksSlice';

export const store = configureStore({
  reducer: {
    tasks: tasksReducer,
  },
});