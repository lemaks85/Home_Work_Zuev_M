import { configureStore } from "@reduxjs/toolkit";
import themeReducer from "../components/themeSlice"

export const themeStore = configureStore({
  reducer: {
    theme: themeReducer,
  },
});