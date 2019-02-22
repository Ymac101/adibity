package config

import (
	"encoding/json"
	"io"
	"io/ioutil"
	"os"
)

type Loader interface {
	Load() (*Config, error)
}

type jsonLoader struct {
	io.Reader
}

func NewJsonLoader(reader io.Reader) Loader {
	return &jsonLoader{
		Reader: reader,
	}
}

func (l *jsonLoader) Load() (*Config, error) {
	data, err := ioutil.ReadAll(l.Reader)
	if err != nil && err != io.EOF {
		return nil, err
	}

	conf := &Config{}

	if err := json.Unmarshal(data, conf); err != nil {
		return nil, err
	}

	return conf, nil
}

func LoadConfigFromFile(src string) (*Config, error) {
	f, err := os.Open(src)
	if err != nil {
		return nil, err
	}
	defer f.Close()

	return NewJsonLoader(f).Load()
}
