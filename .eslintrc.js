module.exports = {
    "env": {
        "browser": true,
        "commonjs": true,
        "es2021": true
    },
    "extends": [
        "plugin:vue/strongly-recommended",
        "eslint:recommended",
        "@vue/prettier",
        "airbnb-base"
    ],
    "parserOptions": {
        "ecmaVersion": 12
    },
    "plugins": [
        "vue"
    ],
    "rules": {
    },
    "ignorePatterns": [
        ".eslintrc.js"
    ],
};
