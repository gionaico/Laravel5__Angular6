export interface listDispositivos {
  type: string;

  filters: {
    slug?: string;
    id?: string;
    name?: string;
    model?: string;
    brand?: string;
    description?: string;
    price?: number;
    origin_country?: string,

  };
}
