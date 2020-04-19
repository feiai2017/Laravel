import TestAPI from '../api/test';

export const tests = {
    state: {
        tests: [],
        testsLoadStatus : 0,

        test: {},
        testLoadStatus : 0
    },

    actions: {
        loadTests({ commit }){
            commit('setTestsLoadStatus', 1);
            TestAPI.getAll().then(function (response) {
                commit('setTests', response.data);
                commit('setTestsLoadStatus', 2)
            }).catch( function () {
                commit('setTests', []);
                commit('setTestsLoadStatus', 3)
            })


        },

        loadTest({ commit }, data){

        }
    },

    mutations : {
        setTestsLoadStatus(state, status){
            state.TestsLoadStatus = status;
        },

        setTests(state, tests){
            state.tests = tests;
        }

    },

    getters: {
        getTestsLoadStatus(state) {
            return state.testsLoadStatus;
        },

        getTests(state) {
            return state.tests;
        }
    }

}
