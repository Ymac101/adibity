package handlers

import "net/http"

var All = map[string]http.Handler{
	"/": http.FileServer(http.Dir("frontend")),
}