import { configureStore } from '@reduxjs/toolkit';
import editorReducer from '../slices/editorSlice.js';
import tabsBoxReducer from '../slices/tabsBoxSlice.js';
import checkResultReducer from '../slices/checkResultSlice.js';

export default () => {
  const store = configureStore({
    reducer: {
      editor: editorReducer,
      tabsBox: tabsBoxReducer,
      checkResult: checkResultReducer,
    },
  });

  return store;
};
