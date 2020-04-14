require('es6-promise').polyfill();

import Vue from "vue";
import Vuex from 'vuex';

Vue.use(Vuex);
import { tests } from './modules/test'

export default new Vuex.Store({
    modules:{
        tests
    }
})
