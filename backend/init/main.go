package main

import (
	"github.com/Ymac101/adibity/backend/config"
	"github.com/Ymac101/adibity/backend/handlers"
	"log"
	"net/http"
)

func main() {
	conf, err := config.LoadConfigFromFile(config.ConfigPath)
	if err != nil {
		panic(err)
	}

	for path, handler := range handlers.All {
		http.Handle(path, handler)
	}

	log.Fatal(http.ListenAndServe(conf.ServerAddress, nil))
}
