module.exports = {

    entry: "./src/app.js",

    output: {

        filename: "bundle.js"
    },
    
    module: {
        loaders: [
            { test: /\.css$/, loader: "style!css" }
        ]
    },

    devServer: {
    inline:true,
    port: 8008
  },
};